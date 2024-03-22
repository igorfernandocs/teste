import { Banner, Blog, Schedule, VideoCarousel } from '@/components'

import { VideoCarouselTrending } from '@/components/video-carousel-trending'
import { api } from '@/services/api'
import { blogApi } from '@/services/blog-api'
import { AxiosResponse } from 'axios'
import { cookies } from 'next/headers'
import { notFound } from 'next/navigation'
import { BannerType } from '../types/banner'
import { BlogSectionType } from '../types/blog'
import { scheduleType } from '../types/schedule'
import { SeriesType } from '../types/series'

export const revalidate = 0

const MIN_ITEMS_FOR_LOOP = 6

export default async function Page() {
  const bannerData: AxiosResponse<BannerType[]> =
    await api.get('/playlists/banners')

  const ourSeriesData: AxiosResponse<SeriesType[]> = await api.get('/playlists')
  const newsSeriesData: AxiosResponse<SeriesType[]> =
    await api.get('/episodes/news')
  const topSeenData: AxiosResponse<SeriesType[]> =
    await api.get('/episodes/top-five')

  const cookieStore = cookies()
  const episodeIds = cookieStore.get('episodeIds')?.value || '[]'

  const watchedData: AxiosResponse<SeriesType[]> = await api.get(
    '/episodes/watched',
    {
      params: {
        watched_ids: JSON.parse(episodeIds),
      },
    },
  )

  const newsData: AxiosResponse<SeriesType[]> = await api.get('/episodes/news')
  const scheduleData: AxiosResponse<scheduleType[]> = await api.get(
    '/scheduling-banners',
  )
  const blogData: AxiosResponse<BlogSectionType> = await blogApi.get(
    `/noticias/${process.env.NEXT_PUBLIC_TOKEN_API}`,
  )

  if (
    !(
      bannerData?.data &&
      ourSeriesData?.data &&
      topSeenData.data &&
      newsSeriesData.data &&
      newsData.data &&
      blogData?.data
    )
  ) {
    notFound()
  }

  const carouselOurSerieProps = {
    loop: ourSeriesData.data.length > MIN_ITEMS_FOR_LOOP,
  }

  const carouselWatchedDataProps = {
    slidesPerView: 1.8,
    loop: watchedData.data.length > MIN_ITEMS_FOR_LOOP,
  }

  const carouselNewsProps = {
    slidesPerView: 1.8,
  }

  return (
    <div className="wrapper">
      <Banner banners={bannerData.data} />

      <div className="pl-0.5">
        <VideoCarousel
          title="Nossas séries"
          videoData={ourSeriesData.data}
          swiperProps={carouselOurSerieProps}
        />

        <VideoCarouselTrending
          title="Top 5: Mais vistas"
          videoData={topSeenData.data}
          swiperProps={{}}
        />
      </div>

      <VideoCarousel
        title="Novidades"
        videoData={newsData.data}
        swiperProps={carouselNewsProps}
      />

      <div className="pl-0.5">
        {watchedData.data.length > 0 && (
          <VideoCarousel
            title="Para Rever"
            videoData={watchedData.data}
            swiperProps={carouselWatchedDataProps}
          />
        )}
      </div>

      <div className="py-14 md:py-20 bg-gray-200">
        <Blog blogData={blogData.data} />
        {scheduleData.data.length > 0 && <Schedule data={scheduleData.data} />}
      </div>
    </div>
  )
}

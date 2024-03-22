'use client'
import { SeriesType } from '@/app/types/series'
import { VideoCard } from '@/components'
import 'swiper/css'
import 'swiper/css/autoplay'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import { Navigation } from 'swiper/modules'
import { Swiper, SwiperProps, SwiperSlide } from 'swiper/react'

type CarouselProps = {
  title: string
  swiperProps: SwiperProps
  videoData: SeriesType[]
  isTrending?: boolean
  loop?: boolean | undefined
}

export const VideoCarousel: React.FC<CarouselProps> = ({
  title,
  swiperProps,
  videoData,
  loop = false,
}) => {
  const swiperDefaultProps: SwiperProps = {
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    loop: loop,
    slidesPerView: 2,
    spaceBetween: '30px',
    slidesOffsetBefore: 24,
    modules: [Navigation],
    navigation: true,
    breakpoints: {
      640: {
        slidesPerView: 2.8,
      },
      768: {
        slidesPerView: 4.8,
        slidesOffsetBefore: 64,
      },
    },
  }
  const mergedSwiperProps = { ...swiperDefaultProps, ...swiperProps }

  return (
    <div className="py-4">
      <h2 className="text-2xl font-bold mb-4 text-white px-5 md:px-10 md:ml-6">
        {title}
      </h2>

      <Swiper {...mergedSwiperProps}>
        {videoData.map((data, index) => {
          const episodeLink = data.episode
            ? `${data.slug}/#T${data.season_id}:E${data.episode}`
            : data.slug
          return (
            <SwiperSlide key={index}>
              <div className="pb-8">
                <VideoCard
                  title={data.title}
                  link={episodeLink}
                  thumbnail={data.thumbnail}
                />
              </div>
            </SwiperSlide>
          )
        })}
      </Swiper>
    </div>
  )
}

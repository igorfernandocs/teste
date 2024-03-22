import { FirstEpisode, Season } from '@/components'
import { api } from '@/services/api'
import { AxiosResponse } from 'axios'
import { notFound } from 'next/navigation'
import { SeriesType } from '../types/series'

export const revalidate = 0

export default async function Serie({ params }: { params: { slug: string } }) {
  const seriesData: AxiosResponse<SeriesType> = await api.get(
    `/playlists/${params.slug}`,
  )

  if (!seriesData?.data) {
    notFound()
  }
  const { logo, description, seasons, image } = seriesData?.data
  const firstSeason = seasons && seasons[seasons.length - 1]
  const firstEpisode = firstSeason?.episodes[firstSeason?.episodes.length - 1]

  return (
    <div className="wrapper bg-green">
      {firstEpisode && (
        <FirstEpisode
          logo={logo}
          banner={image}
          description={description || ''}
          episode={firstEpisode}
        />
      )}

      <div className="container mx-auto text-white sm:pb-32 px-4 sm:px-4 md:px-4 xl:px-8">
        {seasons &&
          seasons.map((season, index) => {
            return (
              <div key={index}>
                <div className="flex flex-row justify-between text-xl font-black border border-light-green border-t-0 border-l-0 border-r-0 border-b-1 pb-5 mt-8">
                  <span className="leading-4 pb-3">Episódio</span>
                  <span className="leading-4 pb-3">Temporada {index + 1}</span>
                </div>
                <Season season={season} />
              </div>
            )
          })}
      </div>
    </div>
  )
}

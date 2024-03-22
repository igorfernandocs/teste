'use client'
import { EpisodeType } from '@/app/types/episode'
import { SeasonType } from '@/app/types/season'
import { getYoutubeThumbnail } from '@/helpers/youtube'
import Image from 'next/image'
import { FC, useState } from 'react'
import { Modal } from '../modal'

type Props = {
  season: SeasonType
}

export const Season: FC<Props> = ({ season }) => {
  const [modalOpen, setModalOpen] = useState(false)
  const [currentEpisode, setCurrentEpisode] = useState<EpisodeType | null>(null)
  const { episodes } = season

  const openModal = ({
    id,
    url_video,
    season_id,
    episode,
    title,
    description,
    duration,
    thumbnail,
  }: EpisodeType) => {
    setCurrentEpisode({
      id,
      season_id,
      title,
      url_video,
      description,
      episode,
      duration,
      thumbnail,
    })
    setModalOpen(true)
  }

  const closeModal = () => {
    setModalOpen(false)
  }

  return (
    <div>
      {episodes.map((ep, index) => {
        const video = ep.thumbnail || getYoutubeThumbnail(ep.url_video)

        return (
          <div
            id={`T${ep.season_id}:E${ep.episode}`}
            className="border sm:cursor-pointer border-light-green border-t-0 border-l-0 border-r-0 border-b-1 pb-10 pt-10 flex flex-col sm:flex-row gap-5 text-xl md:items-center"
            key={index}
            onClick={() => openModal(ep)}
          >
            <div className="overflow-hidden sm:cursor-pointer shadow-3xl aspect-[388/298] max-w-[460px] relative rounded-[28px] group shrink-0 min-w-[298px]">
              {video && (
                <Image
                  src={video}
                  fill
                  alt={ep.title}
                  className="rounded-t group-hover:scale-105 transition-transform object-cover aspect-[388/298]"
                />
              )}
            </div>
            <div className="p-3 gap-2 flex flex-col">
              <span>
                Episódio {ep.episode} | {ep.title}
              </span>
              <p className="text-md md:text-lg font-light">{ep.description}</p>
            </div>
          </div>
        )
      })}

      {currentEpisode && (
        <Modal
          handleCloseModal={closeModal}
          isOpen={modalOpen}
          episode={currentEpisode}
        />
      )}
    </div>
  )
}

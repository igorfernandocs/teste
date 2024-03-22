'use client'
import { EpisodeType } from '@/app/types/episode'
import Image from 'next/image'
import { FC, useState } from 'react'
import { Modal } from '../modal'

type Props = {
  logo: string
  banner: string
  description: string
  episode: EpisodeType
}

export const FirstEpisode: FC<Props> = ({
  logo,
  banner,
  episode,
  description,
}) => {
  const [modalOpen, setModalOpen] = useState(false)
  const [currentEpisode, setCurrentEpisode] = useState<EpisodeType | null>(null)

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
    <div
      className="h-screen min-h-[730px] bg-cover bg-center flex items-end justify-start relative overflow-hidden px-4 sm:px-4 md:px-8"
      style={{ backgroundImage: `url(${banner})` }}
    >
      <div className="overlay absolute h-full w-4/5 left-0 bg-gradient-to-l from-transparent to-green" />
      <div className="overlay absolute  w-full h-96 left-0 bg-gradient-to-b from-transparent to-green " />
      <div className="text-white text-left container mx-auto relative pb-10 md:px-0">
        {episode.description && (
          <Image
            width={340}
            height={400}
            alt={episode.title}
            src={logo}
            className="pt-10 object-contain"
          />
        )}
        <div className="py-3 flex gap-2 flex-col">
          <span className="text-xl font-black leading-4 pb-3">
            {episode.title}
          </span>
          <p className="max-w-[800px] text-lg font-light leading-6">
            {description}
          </p>
        </div>
        <div className="inline-flex items-center justify-center mt-6">
          <button
            className="bg-neon-orange text-green hover:bg-dark-green transition hover:text-neon-orange py-4 px-10 font-bold text-3xl rounded-full inline-flex justify-between items-center"
            onClick={() => openModal(episode)}
          >
            <span className="pr-4">Play</span>
            <svg width="27" height="32" viewBox="0 0 27 32" fill="none">
              <path
                d="M25.5 13.4019C27.5 14.5566 27.5 17.4434 25.5 18.5981L4.5 30.7224C2.5 31.8771 -1.29222e-06 30.4337 -1.19127e-06 28.1243L-1.3133e-07 3.87563C-3.03827e-08 1.56623 2.5 0.122852 4.5 1.27755L25.5 13.4019Z"
                fill="currentColor"
              />
            </svg>
          </button>
        </div>
      </div>
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

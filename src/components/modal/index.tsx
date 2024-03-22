'use client'
import { EpisodeType } from '@/app/types/episode'
import useCookie from '@/hooks/use-cookies'
import React, { useEffect } from 'react'
import ReactPlayer from 'react-player'

type Props = {
  isOpen: boolean
  episode: EpisodeType
  handleCloseModal: () => void
}

export const Modal: React.FC<Props> = ({
  isOpen,
  episode,
  handleCloseModal,
}) => {
  const [episodeIds, setEpisodeIds] = useCookie('episodeIds', [], 30)

  useEffect(() => {
    if (!episodeIds.includes(episode.id)) {
      setEpisodeIds([...episodeIds, episode.id])
    }
  }, [episode.id])

  useEffect(() => {
    const handleKeyDown = (event: KeyboardEvent) => {
      if (event.keyCode === 27) {
        handleCloseModal()
      }
    }
    if (isOpen) {
      window.addEventListener('keydown', handleKeyDown)
    }
    return () => {
      window.removeEventListener('keydown', handleKeyDown)
    }
  }, [isOpen, handleCloseModal])

  const handleOverlayClick = (event: React.MouseEvent<HTMLDivElement>) => {
    if (event.target === event.currentTarget) {
      handleCloseModal()
    }
  }

  if (!isOpen) {
    return null
  }

  return (
    <div
      className="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-50"
      onClick={(event) => handleOverlayClick(event)}
    >
      <div className="max-w-[900px] bg-white p-4 rounded-lg w-full relative mx-5 sm:mx-0">
        <button
          onClick={() => handleCloseModal()}
          className="absolute -top-4 -right-4 text-black text-4xl h-12 w-12 flex items-center justify-center bg-white hover:bg-slate-100 rounded-full"
        >
          <svg
            className="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              strokeLinecap="round"
              strokeLinejoin="round"
              strokeWidth={2}
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
        <div className="w-full mx-auto p-4">
          <h3 className="text-center w-full text-lg text-gray-800 pb-8">
            {episode.title}
          </h3>
          <div className="aspect-video">
            <ReactPlayer
              controls={true}
              width="100%"
              height="100%"
              url={episode.url_video}
              playing={true}
            />
          </div>
        </div>
      </div>
    </div>
  )
}

import Image from 'next/image'
import Link from 'next/link'
import React from 'react'

type Props = {
  title: string
  thumbnail?: string
  link: string
}

export const VideoCard: React.FC<Props> = ({ title, thumbnail, link }) => {
  return (
    <Link href={link || '/'}>
      <div className="overflow-hidden sm:cursor-pointer shadow-3xl aspect-[13/10] max-w-[460px] relative rounded-[28px] group">
        {thumbnail && (
          <Image
            src={thumbnail}
            alt={title}
            fill={true}
            className="rounded-t group-hover:scale-105 transition-transform object-cover"
          />
        )}
      </div>
    </Link>
  )
}

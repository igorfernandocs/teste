import Image from 'next/image'
import Link from 'next/link'
import React from 'react'

type Props = {
  position: number
  title: string
  thumbnail?: string
  link: string
}

export const VideoCardTrends: React.FC<Props> = ({
  position,
  title,
  thumbnail,
  link,
}) => {
  return (
    <Link href={link || '/'}>
      <div className="aspect-[13/10] max-w-[370px] group relative">
        <div className="text-[148px] md:text-[290px] 2xl:text-[348px] font-bold absolute -right-4 top-0 leading-none text-outline text-dark-green">
          {position}
        </div>
        <div className="overflow-hidden aspect-[21/30] max-w-[210px] relative shadow-3xl rounded-[28px]">
          {thumbnail && (
            <Image
              src={thumbnail}
              alt={title}
              fill={true}
              className="rounded-t group-hover:scale-105 transition-transform object-cover"
            />
          )}
        </div>
      </div>
    </Link>
  )
}

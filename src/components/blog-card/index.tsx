import { BlogCardType } from '@/app/types/blog'
import Image from 'next/image'
import Link from 'next/link'
import React from 'react'

type PostProps = {
  data: BlogCardType
}

export const BlogCard: React.FC<PostProps> = ({ data }) => {
  const { categories, title, description, date, link, thumbnail } = data
  return (
    <Link
      target="_blank"
      className="overflow-hidden flex flex-col bg-white rounded-3xl group-hover:scale-105 transition-transform"
      href={link || '/'}
    >
      <div className="aspect-[14/7] max-w-[460px] relative group">
        <Image
          src={thumbnail}
          alt={title}
          fill={true}
          className="object-cover"
        />
      </div>
      <div className="p-3 gap-2 flex flex-col">
        <span className="text-xs font-normal">{categories}</span>
        <h3 className="text-base font-black leading-4 min-h-8 line-clamp-2">
          {title}
        </h3>
        <p className="text-sm font-light line-clamp-3 min-h-[60px]">
          {description}
        </p>
        <div className="flex flex-row justify-between">
          <span className="text-xs font-light">{date}</span>
          <span className="text-xs">Leia mais...</span>
        </div>
      </div>
    </Link>
  )
}

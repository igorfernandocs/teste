'use client'
import { BlogCardType } from '@/app/types/blog'
import { BlogCard } from '@/components'
import React from 'react'
import { Swiper, SwiperProps, SwiperSlide } from 'swiper/react'

type BlogProps = {
  blogData: {
    title: string
    description: string
    link: string
    posts: BlogCardType[]
  }
}

export const Blog: React.FC<BlogProps> = ({ blogData }) => {
  const swiperDefaultProps: SwiperProps = {
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: 1.8,
    spaceBetween: '25px',
    slidesOffsetBefore: 64,
    breakpoints: {
      640: {
        slidesPerView: 2.8,
      },
    },
  }

  return (
    <div className="flex flex-wrap md:pl-10">
      <div className="w-full md:w-2/5 mb-16 pl-5 md:pl-0 pr-10">
        <h3 className="text-6xl md:text-8xl font-black tracking-tighter mb-4 text-light-green">
          {blogData.title}
        </h3>
        <p className="text-lg md:text-xl bg-gray-200 font-light">
          {blogData.description}
        </p>
        <p className="text-2xl md:text-3xl font-black text-light-green py-8">
          Veja nossos posts
        </p>
        <a
          className="bg-yellow text-green px-7 py-3 tracking-tighter font-bold text-lg md:text-2xl rounded-full inline-block hover:bg-light-green hover:text-white transition-colors duration-10"
          href={blogData.link}
          target="_blank"
        >
          Saiba Mais
        </a>
      </div>
      <div className="w-full md:w-3/5 px-0 mr-0">
        <div className="relative mx-auto md:mr-0 max-w-max">
          <Swiper {...swiperDefaultProps}>
            {blogData.posts.map((data, index) => (
              <SwiperSlide key={index}>
                <div>
                  <BlogCard data={data} />
                </div>
              </SwiperSlide>
            ))}
          </Swiper>
        </div>
      </div>
    </div>
  )
}

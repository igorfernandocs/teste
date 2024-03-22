'use client'
import { BannerType } from '@/app/types/banner'
import Image from 'next/image'
import { FC } from 'react'
import 'swiper/css'
import 'swiper/css/autoplay'
import 'swiper/css/pagination'
import { Autoplay, Navigation, Pagination } from 'swiper/modules'
import { Swiper, SwiperSlide } from 'swiper/react'

type Props = {
  banners: BannerType[]
}

export const Banner: FC<Props> = ({ banners }) => {
  return (
    <Swiper
      modules={[Navigation, Pagination, Autoplay]}
      autoplay={{ delay: 5000 }}
      spaceBetween={0}
      slidesPerView={1}
      pagination={{ clickable: true }}
      className="h-screen mb-14 min-h-[730px]"
    >
      {banners.map((banner, index) => (
        <SwiperSlide key={index}>
          <div
            className="h-full bg-cover bg-center flex items-end justify-start px-4 sm:px-4 md:px-8 lg:px-8"
            style={{
              backgroundImage: `url(${banner.background})`,
            }}
          >
            <div className="overlay absolute h-full w-4/5 left-0 bg-gradient-to-l from-transparent to-green" />
            <div className="overlay absolute h-80 -bottom-44 w-full left-0 bg-gradient-to-b from-transparent to-green" />
            <div className="text-white text-left container mx-auto relative pb-24 sm:pb-20 z-50">
              <Image
                src={banner.logo}
                width={340}
                height={100}
                alt={banner.description}
                className="object-contain mb-4"
              />
              <p className="text-base mb-6 text-balance max-w-[560px]">
                {banner.description}
              </p>
              <a
                href={banner.buttonLink || banner.slug}
                className="bg-neon-orange text-green hover:bg-dark-green transition hover:text-neon-orange py-2 px-5 md:py-4 md:px-10 font-bold text-2xl md:text-3xl rounded-full inline-flex justify-between items-center"
              >
                {banner.buttonText || 'Saiba Mais'}
              </a>
            </div>
          </div>
        </SwiperSlide>
      ))}
    </Swiper>
  )
}

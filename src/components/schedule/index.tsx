import { scheduleType } from '@/app/types/schedule'
import Image from 'next/image'
import Link from 'next/link'
import React from 'react'

type scheduleProps = {
  data: scheduleType[]
}

export const Schedule: React.FC<scheduleProps> = ({ data }) => {
  return (
    <div className="flex flex-col gap-3 md:gap-10">
      {data.map((item, index) => {
        return (
          <div
            key={index}
            className="w-full pt-10 md:mb-0 px-3 md:px-10"
            id="agende"
          >
            <div className="relative">
              <Link href={item.link} target="_blank">
                <Image
                  className="w-full hidden md:block md:rounded-3xl"
                  src={item.image}
                  alt={'Banner Odonto Company Play'}
                  width={1400}
                  height={350}
                />
                <Image
                  className="w-full block rounded-3xl md:hidden"
                  src={item.image_mobile}
                  alt={'Banner Odonto Company Play'}
                  width={600}
                  height={800}
                />
              </Link>
            </div>
          </div>
        )
      })}
    </div>
  )
}

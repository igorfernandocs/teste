import { footerApi } from '@/services/footer-api'
import { AxiosResponse } from 'axios'
import Image from 'next/image'
import React from 'react'

import { FooterType } from '@/app/types/footer'
import FacebookIcon from '../icons/icon-facebook'
import InstagramIcon from '../icons/icon-instagram'
import LinkedinIcon from '../icons/icon-linkedin'
import YouTubeIcon from '../icons/icon-youtube'

type IconsSocialType = {
  [key: string]: JSX.Element
}

const IconsSocial: IconsSocialType = {
  Facebook: <FacebookIcon />,
  Instagram: <InstagramIcon />,
  Linkedin: <LinkedinIcon />,
  YouTube: <YouTubeIcon />,
}

export const Footer: React.FC = async () => {
  const footerData: AxiosResponse<FooterType> = await footerApi.get(
    `/footer/${process.env.NEXT_PUBLIC_TOKEN_API}`,
  )

  const { data } = footerData
  const { support, apps, address, badges, sections, social, logo_smzto } = data

  return (
    <footer className="bg-footer py-12 md:py-20 px-5">
      <div className="text-white text-left container mx-auto relative">
        <div className="md:flex border-b-2 border-black pb-4 border-opacity-10">
          <div className="w-1/2 pb-6">
            <div className="col-12 col-md-6">
              <p className="mb-2 text-lg">{support.title}</p>
              <p className="mb-2 text-sm">{support.description}</p>
              <p className="mb-2 text-lg">
                <span>{support.phone}</span>
              </p>
            </div>
          </div>
          <div className="w-1/2 pb-6" id="quem-somos">
            <div className="col-12 col-md-6">
              <p className="mb-2 text-lg">{apps.title}</p>
              <p className="mb-2 text-sm">{apps.description}</p>
              <p className="mb-2 text-lg flex gap-2">
                {apps.downloadButtons.map((item, index) => {
                  return (
                    <a href={item.link} target="_blank" key={index}>
                      <Image
                        width={100}
                        height={30}
                        src={item.image}
                        alt="OdontoCompany"
                      />
                    </a>
                  )
                })}
              </p>
            </div>
          </div>
        </div>
        <div className="flex flex-wrap pb-8 md:pb-4 mt-10 gap-1">
          {sections.map((section, index) => (
            <div key={index} className="w-12/12 sm:w-4/12 md:w-2/12 pb-6 pr-3">
              <strong className="text-base text-white font-black tracking-wide pb-4 inline-block">
                {section.title}
              </strong>
              <ul>
                {section.links.map((link, linkIndex) => (
                  <li key={linkIndex} className="mb-1 md:mb-2">
                    {link.external === '0' && link.url ? (
                      <a
                        href={
                          process.env.NEXT_PUBLIC_SITE_ODONTO_COMPANY + link.url
                        }
                        className="mb-2 hover:underline"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        {link.title}
                      </a>
                    ) : (
                      <>
                        <a
                          href={link.url}
                          className={`mb-2 ${link.url === null ? 'hover:no-underline' : 'hover:underline'}`}
                          target="_blank"
                          rel="noopener noreferrer"
                        >
                          {link.title}
                        </a>
                        {link.subtitle && (
                          <p className="text-base font-normal">
                            {link.subtitle}
                          </p>
                        )}
                      </>
                    )}
                  </li>
                ))}
              </ul>
            </div>
          ))}
          <div className="w-6/12 sm:w-2/12"></div>
          <div className="w-6/12 sm:w-4/12 md:w-3/12">
            <strong className="text-xs text-white font-medium tracking-wide pb-6 inline-block">
              {badges.title}
            </strong>
            <div className="flex flex-col items-center">
              {badges.items.map((badge, index) => {
                return badge.link ? (
                  <a href={badge.link} target="_blank" key={index}>
                    <Image
                      width={badge.width}
                      height={badge.height}
                      alt={badge.name}
                      src={badge.image}
                    />
                  </a>
                ) : (
                  <Image
                    key={index}
                    width={badge.width}
                    height={badge.height}
                    alt={badge.name}
                    src={badge.image}
                  />
                )
              })}
            </div>
          </div>
        </div>
        <div className="flex mt-10 flex-col items-center">
          <h3 className="text-white text-center mb-3 w-full mt-10 text-2xl font-light">
            {social.title}
          </h3>
          <ul className="flex justify-center items-center gap-4 md:gap-20">
            {social.items.map((item, index) => {
              return (
                <li key={index} className="nav-item">
                  <a
                    target="_blank"
                    aria-label={item.name}
                    className="nav-link px-2 px-md-4"
                    href={item.link}
                  >
                    {IconsSocial[item.name as keyof IconsSocialType]}
                  </a>
                </li>
              )
            })}
          </ul>

          <a
            href={logo_smzto.link}
            target="_blank"
            aria-label="Smzto"
            className="mt-10"
          >
            <Image
              width={166}
              height={48}
              src={logo_smzto.image}
              alt="OdontoCompany"
            />
          </a>
          <p className="text-xs font-light mt-20 md:mt:40 text-center md:text-left">
            {address}
          </p>
        </div>
      </div>
    </footer>
  )
}

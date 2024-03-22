'use client'
import { SerieType } from '@/app/types/serie'
import Image from 'next/image'
import Link from 'next/link'
import React, { useState } from 'react'
type Props = {
  series: SerieType[]
}
export const Header: React.FC<Props> = ({ series }) => {
  const submenus = series.map((serie) => {
    return {
      label: serie.title,
      link: serie.slug,
    }
  })
  const menus = [
    {
      label: 'Nossas Séries',
      link: '',
      submenu: submenus,
    },
    {
      label: 'Agende',
      link: '#agende',
    },
    {
      label: 'Quem Somos',
      link: 'https://odontocompany.com/empresa',
    },
  ]
  const [navbar, setNavbar] = useState(false)

  const toggleMenu = () => {
    setNavbar(!navbar)
    document.body.style.overflow = navbar ? 'auto' : 'hidden'
  }

  return (
    <>
      <div className="absolute top-0 left-0 w-full h-80 bg-gradient-to-b from-dark-green z-20 to-transparent pointer-events-none"></div>
      <header className="text-white p-4 absolute top-12 left-0 w-full z-50">
        <nav className="md:container w-full md:mx-auto flex text-[24px] md:text-[18px]">
          <div className="w-full sm:px-4 md:flex">
            <div>
              <div className="flex items-center justify-between py-3 md:block ">
                <Link href="/">
                  <Image
                    src="/images/logo-odonto-play.svg"
                    alt="Logo"
                    width={240}
                    height={84}
                    className="w-56 sm:w-96 lg:w-[400px]"
                  />
                </Link>
                <div className="md:hidden">
                  <button
                    className={`p-2 text-white rounded-md outline-none border border-white z-10 ${navbar ? 'fixed right-[16px] top-[77px]' : 'relative'}`}
                    onClick={toggleMenu}
                  >
                    {navbar ? (
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        className="w-12 h-12"
                        viewBox="0 0 20 20"
                        fill="#fff"
                      >
                        <path
                          fillRule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clipRule="evenodd"
                        />
                      </svg>
                    ) : (
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        className="w-12 h-12"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="#fff"
                        strokeWidth={2}
                      >
                        <path
                          strokeLinecap="round"
                          strokeLinejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"
                        />
                      </svg>
                    )}
                  </button>
                </div>
              </div>
            </div>
            <div className="flex-1 flex justify-end items-center">
              <div
                className={`fixed md:relative w-full bg-gradient-to-br md:bg-none from-dark-green to-green top-0 md:h-auto left-0 flex-1 pt-[75px] md:pt-3 md:block md:pb-0 transition-transform duration-300 h-screen ${navbar ? 'translate-x-0' : 'translate-x-full md:translate-x-0'}`}
              >
                <ul className="flex md:space-x-6 text-left pl-10 flex-col md:flex-row justify-end">
                  {menus.map((item, index) => {
                    return (
                      <li
                        className="relative group p-0 mb-5 md:mb-0"
                        key={index}
                      >
                        {item.link ? (
                          <Link
                            onClick={() => setNavbar(!navbar)}
                            href={item.link}
                            className="block hover:text-neon-orange"
                            target="_blank"
                          >
                            {item.label}
                          </Link>
                        ) : (
                          <div className="sm:hover:text-neon-orange cursor-default">
                            {item.label}
                          </div>
                        )}
                        {item.submenu && (
                          <ul className="md:group-hover:block md:hidden md:absolute top-full md:bg-green text-white md:rounded-[14px] font-light p-5 text-md whitespace-nowrap">
                            {item.submenu.map((sub, i) => {
                              return (
                                <li key={i}>
                                  <Link
                                    onClick={() => setNavbar(!navbar)}
                                    href={sub.link}
                                    className="block pb-1 hover:text-neon-orange text-base"
                                  >
                                    {sub.label}
                                  </Link>
                                </li>
                              )
                            })}
                          </ul>
                        )}
                      </li>
                    )
                  })}
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header>
    </>
  )
}

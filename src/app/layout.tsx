import { Footer, Header } from '@/components'
import { api } from '@/services/api'
import '@/styles/custom.css'
import '@/styles/globals.css'
import '@/styles/overrides.css'
import { AxiosResponse } from 'axios'
import type { Metadata } from 'next'
import localFont from 'next/font/local'
import { SeriesType } from './types/series'

const gotham = localFont({
  src: [
    {
      path: '../fonts/Gotham-Bold.woff2',
      weight: 'bold',
      style: 'normal',
    },
    {
      path: '../fonts/Gotham-Light.woff2',
      weight: '300',
      style: 'normal',
    },
    {
      path: '../fonts/Gotham-Medium.woff2',
      weight: '500',
      style: 'normal',
    },
  ],
})

export const metadata: Metadata = {
  title: 'OdontoCompanyPlay',
  description: 'OdontoCompanyPlay - Plataforma de vídeos',
}

export default async function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode
}>) {
  const ourSeriesData: AxiosResponse<SeriesType[]> = await api.get('/playlists')
  return (
    <html lang="pt-BR">
      <body className={`overflow-x-hidden ${gotham.className}`}>
        <Header series={ourSeriesData?.data} />
        {children}
        <Footer />
      </body>
    </html>
  )
}

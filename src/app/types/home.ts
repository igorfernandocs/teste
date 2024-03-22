import { BannerType } from './banner'
import { VideoData } from './video'

export type HomeType = {
  banners: BannerType[]
  mostSeen: {
    title: string
    content: VideoData[]
  }
  topSeen: {
    title: string
    content: VideoData[]
  }
  newest: {
    title: string
    content: VideoData[]
  }
}

import { SeasonType } from './season'

export type SerieType = {
  id: number
  title: string
  slug: string
  logo: string
  image: string
  season_id?: string
  thumbnail?: string
  thumbnail_top_five?: string
  description?: string
  seasons?: SeasonType[]
  episode?: string
}

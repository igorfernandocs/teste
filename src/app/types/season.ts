import { EpisodeType } from './episode'

export type SeasonType = {
  id: number
  season: number
  episodes: EpisodeType[]
}

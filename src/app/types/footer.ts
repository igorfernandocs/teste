type Support = {
  title: string
  description: string
  phone: string
}

type DownloadButton = {
  link: string
  image: string
}

type Apps = {
  title: string
  description: string
  downloadButtons: DownloadButton[]
}

type Link = {
  title: string
  url: string | undefined
  subtitle: string | null
  external: string | undefined
}

type Section = {
  title: string
  links: Link[]
}

type Badge = {
  name: string
  image: string
  width: number
  height: number
  link: string | null
}

type Badges = {
  title: string
  items: Badge[]
}

type SocialItem = {
  name: string
  link: string
  image: string
}

type Social = {
  [x: string]: any
  title: string
  items: SocialItem[]
}

export type FooterType = {
  support: Support
  apps: Apps
  sections: Section[]
  badges: Badges
  social: Social
  address: string
  logo_smzto: {
    image: string
    link: string
  }
}

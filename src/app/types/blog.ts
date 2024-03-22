export type BlogCardType = {
  categories: string
  title: string
  description: string
  date: string
  link: string
  thumbnail: string
}

export type BlogSectionType = {
  title: string
  description: string
  link: string
  posts: BlogCardType[]
}

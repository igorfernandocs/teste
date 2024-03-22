import axios from 'axios'

export const blogApi = axios.create({
  baseURL: process.env.NEXT_PUBLIC_API_EXTERNAL,
})

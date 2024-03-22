import axios from 'axios'

export const footerApi = axios.create({
  baseURL: process.env.NEXT_PUBLIC_API_EXTERNAL,
})

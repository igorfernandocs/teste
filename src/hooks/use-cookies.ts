import { useEffect, useState } from 'react'

const useCookie = (
  key: string,
  initialValue: number[],
  expirationDays: number,
) => {
  const getCookieData = () => {
    const cookieData = document.cookie
      .split('; ')
      .find((row) => row.startsWith(key + '='))
    if (cookieData) {
      return JSON.parse(cookieData.split('=')[1])
    }
    return initialValue
  }

  const [storedValue, setStoredValue] = useState(getCookieData)

  useEffect(() => {
    const expires = new Date()
    expires.setDate(expires.getDate() + expirationDays)
    document.cookie = `${key}=${JSON.stringify(storedValue)};expires=${expires.toUTCString()};path=/`
  }, [key, storedValue, expirationDays])

  return [storedValue, setStoredValue]
}

export default useCookie

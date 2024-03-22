import { useEffect, useState } from 'react'

const useLocalStorage = (key: string, initialValue: number[]) => {
  const getLocalStorageData = () => {
    const localStorageData = localStorage.getItem(key)
    return localStorageData ? JSON.parse(localStorageData) : initialValue
  }

  const [storedValue, setStoredValue] = useState(getLocalStorageData)

  useEffect(() => {
    localStorage.setItem(key, JSON.stringify(storedValue))
  }, [key, storedValue])

  return [storedValue, setStoredValue]
}

export default useLocalStorage

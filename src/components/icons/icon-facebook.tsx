import React from 'react'

type IconProps = {
  width?: number
  height?: number
}

const FacebookIcon: React.FC<IconProps> = ({ width = 21, height = 39 }) => {
  return (
    <svg
      width={width}
      height={height}
      viewBox="0 0 21 39"
      xmlns="http://www.w3.org/2000/svg"
    >
      <g clipPath="url(#clip0_2048_14)">
        <path
          d="M13.5398 38.185V21.4771H19.1108L20.1719 14.566H13.5398V10.083C13.5398 8.19001 14.4659 6.35004 17.4399 6.35004H20.4548V0.46405C18.6848 0.179216 16.8966 0.0237768 15.104 -0.000976562C9.643 -0.000976563 6.07397 3.30801 6.07397 9.29901V14.564H0.00488281V21.475H6.07397V38.183L13.5398 38.185Z"
          fill="currentColor"
        />
      </g>
      <defs>
        <clipPath id="clip0_2048_14">
          <rect width="20.45" height="38.185" fill="currentColor" />
        </clipPath>
      </defs>
    </svg>
  )
}

export default FacebookIcon

import React from 'react'

type IconProps = {
  width?: number
  height?: number
}

const LinkedinIcon: React.FC<IconProps> = ({ width = 36, height = 36 }) => {
  return (
    <svg
      width={width}
      height={height}
      viewBox="0 0 36 36"
      xmlns="http://www.w3.org/2000/svg"
    >
      <g clipPath="url(#clip0_2048_24)">
        <path
          d="M0.582031 11.656H7.88208V35.1151H0.582031V11.656ZM4.23511 5.79755e-06C5.35531 0.000270308 6.42954 0.445183 7.22192 1.23701C8.01431 2.02883 8.46012 3.10282 8.46118 4.22303C8.46118 5.34439 8.01599 6.4199 7.22363 7.21338C6.43128 8.00687 5.35646 8.45343 4.23511 8.45502C3.11235 8.45529 2.0354 8.00963 1.24121 7.21601C0.447023 6.42238 0.00053032 5.34578 0 4.22303C0.000656047 3.66763 0.110766 3.11783 0.323975 2.60499C0.537183 2.09214 0.849393 1.6263 1.24268 1.23414C1.63596 0.841969 2.10252 0.531155 2.61597 0.319403C3.12941 0.10765 3.67971 -0.000914123 4.23511 5.79755e-06Z"
          fill="currentColor"
        />
        <path
          d="M12.4551 11.6561H19.449V14.8641H19.5442C20.2442 13.6676 21.2554 12.6834 22.4705 12.0162C23.6855 11.349 25.0588 11.0237 26.4441 11.0751C33.8281 11.0751 35.1891 15.9311 35.1891 22.2481V35.1151H27.9031V23.7101C27.9031 20.9851 27.8511 17.4871 24.1141 17.4871C20.3141 17.4871 19.738 20.4501 19.738 23.5111V35.1111H12.4512L12.4551 11.6561Z"
          fill="currentColor"
        />
      </g>
      <defs>
        <clipPath id="clip0_2048_24">
          <rect width="35.198" height="35.115" fill="currentColor" />
        </clipPath>
      </defs>
    </svg>
  )
}

export default LinkedinIcon

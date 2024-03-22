export const getYoutubeThumbnail = (videoUrl: string) => {
  const getYouTubeVideoId = (videoUrl: string) => {
    const regex =
      /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/
    const match = videoUrl.match(regex)
    return match ? match[1] : null
  }

  const getYouTubeThumbnailUrl = (videoUrl: string) => {
    const videoId = getYouTubeVideoId(videoUrl)
    return videoId
      ? `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`
      : null
  }

  const thumbnailUrl = getYouTubeThumbnailUrl(videoUrl)

  return thumbnailUrl
}

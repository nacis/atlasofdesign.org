# download all volume images

urls=(
  'http://atlasofdesign.org/wp-content/uploads/2012/09/CMR-5-small.jpg'
  'http://atlasofdesign.org/wp-content/uploads/2014/11/vol2_headerwebsite.jpg'
)


function download() {
  for url in "${urls[@]}"
  do
    wget $url
  done
}

download
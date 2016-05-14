# download all volume images

urls=(
  'http://atlasofdesign.org/wp-content/uploads/2013/12/building_yes.jpg'
  'http://atlasofdesign.org/wp-content/uploads/2013/02/willamette.jpg'
  'http://atlasofdesign.org/wp-content/uploads/2012/09/millford.jpg'
  'http://atlasofdesign.org/wp-content/uploads/2012/04/portland_bridges.jpg'
)


function download() {
  for url in "${urls[@]}"
  do
    wget $url
  done
}

download
# download all volume images

files=(
  'Alternative_Strategic_Spatial_Vision_of_Natural_Disaster_Prevention_in_Future_Shanghai.docx'
  'Amelia_Earharts_Final_Flight.docx'
  'An_Unfurling_of_Lake_Michigan.docx'
  'Antarctica.docx'
  'Bears_of_Finland.docx'
  'Bicycletown_Bridgetown.docx'
  'Bob_Marshall_Country.docx'
  'Bonaventure_Cemetery_Illustrated_Map.docx'
  'Caricature_Map_of_Europe_1914.docx'
  'Chart_of_the_Saint-Elias_Isles.docx'
  'Denali_and_the_Alaska_Range.docx'
  'Dolomiti_di_Brenta_hiking_trails_map.docx'
  'Fisher_Ridge_KN_Canyon.docx'
  'Gatwick_and_Heathrow_Worker_Locations.docx'
  'Here_there_be_robots.docx'
  'Jenny_Lake_Hiking_Trails.docx'
  'Losing_Ground.docx'
  'Mars_Cartography.docx'
  'Megans_Woods.docx'
  'Mississippi_River.docx'
  'Monsters_of_the_United_States.docx'
  'The_Analytical_Tourism_Map_of_Piedmont.docx'
  'The_Historical_Ecology_of_Upper_San_Francisquito_Creek.docx'
  'The_North_American_Continent.docx'
  'The_United_States_Her_Natural_and_Industrial_Resources.docx'
  'Those_Who_Did_Not_Cross.docx'
  'UFO_Sightings.docx'
  'Unofficial_TriMet_System_Map.docx'
  'Venice_public_transport_map.docx'
  'Whaam.docx'
  'Yellow_River_Basin.docx'
  'Yellowstone_Elk_Migrations_The_Pulse_of_the_Park.docx'
)


function create() {
  for file in "${files[@]}"
  do
    cp 'temp.docx' $file
  done
}

create
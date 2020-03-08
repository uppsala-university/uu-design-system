printf "\n-- This will generate two CSS files named\n-- uu-system-style.[ver].css and uu-system-style.[ver].min.css\n\n"
printf "Type version (eg. 1.0): "
read version
if [ ${#version} -ge 1 ] 
then
	printf "Compiling files...\n"
	sass uu-system-style.scss ../css/uu-system-style.$version.css
	printf "File generated: ../css/uu-system-style.$version.css\n"
	sass uu-system-style.scss ../css/uu-system-style.$version.min.css --style compressed
	printf "File generated: ../css/uu-system-style.$version.min.css\n"
fi
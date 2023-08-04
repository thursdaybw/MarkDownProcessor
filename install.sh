
#!/bin/bash

while IFS=: read -r filename target_dir
do
    mkdir -p $target_dir
    mv $filename $target_dir
done < manifest.txt

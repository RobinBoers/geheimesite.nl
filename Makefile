SRC_DIR := src
DIST_DIR := dist

SCALE_DOWN := convert {} -resize 600x\> {}
OPTIMIZE_PNG := optipng -strip all -clobber -preserve {} -out {}
OPTIMIZE_JPG := jpegoptim --strip-all --all-progressive --preserve {}

build: optimize-images copy-files scale-images

copy-files:
	mkdir -p $(DIST_DIR)
	cp -r $(SRC_DIR)/* $(DIST_DIR)/

optimize-images: optimize-png optimize-jpg

optimize-jpg:
	find $(SRC_DIR) -type f \( -iname "*.jpg" -o -iname "*.jpeg" \) -exec $(OPTIMIZE_JPG) \; 

optimize-png:
	find $(SRC_DIR) -type f -iname "*.png" -exec $(OPTIMIZE_PNG) \; 

scale-images:
	find $(DIST_DIR) -type f \( -iname "*.jpg" -o -iname "*.jpeg" -o -iname "*.png" \) -exec $(SCALE_DOWN) \;

new:
	./new.sh

serve: 
	cd src && waiter --dev

clean:
	rm -rf $(DIST_DIR)

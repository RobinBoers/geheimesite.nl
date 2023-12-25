SRC_DIR := src
DIST_DIR := dist

PNG_FILES := $(wildcard $(SRC_DIR)/**/*.png)
JPG_FILES := $(wildcard $(SRC_DIR)/**/*.{jpg,jpeg})

SCALE_DOWN = convert -resize 600x> 
OPTIMIZE_PNG = optipng -o7 -strip all
OPTIMIZE_JPG = jpegoptim --strip-all --all-progressive

build: scale-down optimize-png optimize-jpg copy-rest
serve: 
	@waiter --dev

scale-down: $(PNG_FILES) $(JPG_FILES)
	@$(SCALE_DOWN) $(PNG_FILES) $(JPG_FILES) -set filename:output $(DIST_DIR)/%t.%e -evaluate-sequence Add

optimize-png: $(PNG_FILES)
	@echo "Optimizing PNG files..."
	@$(OPTIMIZE_PNG) $(PNG_FILES) -out $(DIST_DIR)

optimize-jpg: $(JPG_FILES)
	@echo "Optimizing JPG files..."
	@$(OPTIMIZE_JPG) $(JPG_FILES) --dest=$(DIST_DIR)

copy-rest:
	@echo "Copying other files..."
	@find $(SRC_DIR) -type f \( ! -name "*.png" ! -name "*.jpg" ! -name "*.jpeg" \) -exec cp {} $(DIST_DIR)/{} \;

clean:
	rm -rf dist
	mkdir -p dist

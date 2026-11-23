using namespace System.Drawing
Add-Type -AssemblyName System.Drawing

# Target canvas size (square)
$targetSize = 600
# Target background color (RGB 205,207,219) – UNSIL studio gray
$bgColor = [Color]::FromArgb(205, 207, 219)

# Folder containing lecturer images (both .jpg and .png)
$imgFolder = "d:/gugaga/sipil-app/public/images/dosen"

# Get all image files
$files = Get-ChildItem -Path $imgFolder -Include *.jpg, *.png -File

foreach ($file in $files) {
    Write-Host "Processing $($file.Name)"
    # Load original image
    $orig = [Bitmap]::FromFile($file.FullName)
    $origWidth = $orig.Width
    $origHeight = $orig.Height
    # Compute scaling factor to fit within targetSize while preserving aspect ratio
    $scale = [Math]::Min($targetSize / $origWidth, $targetSize / $origHeight)
    $newWidth = [int]($origWidth * $scale)
    $newHeight = [int]($origHeight * $scale)
    # Create new square canvas with background color
    $canvas = New-Object Bitmap $targetSize, $targetSize
    $graphics = [Graphics]::FromImage($canvas)
    $graphics.Clear($bgColor)
    # Enable high quality scaling
    $graphics.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
    $graphics.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality
    # Compute top-left position to center the resized image
    $posX = [int](($targetSize - $newWidth) / 2)
    $posY = [int](($targetSize - $newHeight) / 2)
    # Draw resized original onto canvas
    $destRect = New-Object Drawing.Rectangle $posX, $posY, $newWidth, $newHeight
    $graphics.DrawImage($orig, $destRect)
    # Save back – keep original extension/format
    $format = if ($file.Extension -eq ".png") { [Imaging.ImageFormat]::Png } else { [Imaging.ImageFormat]::Jpeg }
    $canvas.Save($file.FullName, $format)
    # Cleanup
    $graphics.Dispose()
    $canvas.Dispose()
    $orig.Dispose()
}

Write-Host "All lecturer images standardized to $targetSize x $targetSize with background #CDCFDB."

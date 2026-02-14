# Design Specifications

## Color Palette

### Primary Colors
- Dark Grey: `#1C2833`
- Dark Blue: `#2C3E50`
- Medium Blue: `#34495E`

### Accent Colors
- Primary Blue: `#4A90E2`
- Secondary Grey: `#5D6D7E`
- Accent Orange: `#F39C12`

### Neutral Colors
- Light Text: `#F8F9F9`
- Glass Background: `rgba(255, 255, 255, 0.1)`
- Glass Border: `rgba(255, 255, 255, 0.2)`

## Typography

### Font Family
- Primary: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
- Fallback: System UI fonts

### Font Sizes
- Hero Title: 3.5rem (56px)
- Section Titles: 2.5rem (40px)
- Subheadings: 1.5rem (24px)
- Body Text: 1rem (16px)
- Small Text: 0.875rem (14px)

### Font Weights
- Regular: 400
- Medium: 500
- Semi-bold: 600
- Bold: 700

## Glass Morphic Effects

### Glass Cards
```css
.glass-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.5);
}
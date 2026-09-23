# AI-Assisted Cataloging

Book intake can start from photographs rather than complete structured metadata.

## Pipeline

```text
photos
  |
  v
image preparation
  |
  v
AI recognition
  |
  v
structured suggestions + confidence
  |
  v
marketplace/search evidence
  |
  v
operator review
  |
  v
catalog record
```

## Human control

AI suggestions are evidence, not irreversible writes.

The application can retain confidence, source type, provider output, processing status, and applied/rejected state.

## Failure handling

Recognition failures have explicit state. Automated restart is bounded so a permanently bad input does not create an infinite processing loop.

AI-heavy image work is isolated from ordinary application work where resource requirements differ.

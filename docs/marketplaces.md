# Marketplace Integration

The production platform integrates multiple marketplace concerns through services, queues, and scheduled synchronization.

## Workloads

Typical independent workloads include:

- products/cards
- prices
- stocks
- new orders
- order status
- reports
- enrichment

## Rate limits

Provider throttling is treated as part of normal operation.

For rate-limited APIs, jobs can retain their work and delay according to provider retry guidance rather than consuming all attempts immediately.

Where provider APIs have independent limits, pauses are separated by concern. A content/publication limit should not unnecessarily stop polling for new orders.

## Failure handling

Temporary 429/5xx failures remain retryable. Permanent mapping or validation failures remain visible for operator review.

## Webhooks and polling

Webhooks can reduce latency but do not remove the need for reconciliation/polling where external delivery is not guaranteed.

The public case study intentionally excludes account identifiers, API credentials, production endpoints, and complete provider payloads.

# Reconciliation & Recovery

Operational systems need a way to explain and repair drift.

## Stock discrepancies

The application can compare expected/local stock with marketplace observations and store discrepancy runs for investigation.

A stale discrepancy snapshot is not treated as current truth.

## Physical recount

Shelf recount and spot-check workflows provide evidence from the physical warehouse.

Corrections are recorded through inventory movements so the before/after state remains auditable.

## Orders

Marketplace order/report data can be reconciled against local reservations and known order items.

Historical reports are retained as audit evidence; ambiguous historical data does not silently mutate current stock.

## Queues

Stale or delayed work is recovered deliberately. Before releasing an old reserved job, the system considers whether a new job would cause parallel duplicate processing.

## Principle

Recovery should be controlled, repeatable, and explainable. Reconciliation exists to detect drift and provide evidence for repair, not to hide inconsistencies.

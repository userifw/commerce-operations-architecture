# Inventory & Warehouse State

Inventory is modeled as operational state with history, not just a mutable quantity.

## Movement history

A stock change can retain:

- item identity
- quantity delta
- balance before
- balance after
- source of the change
- user/operation identity
- request identity
- timestamp

This makes manual corrections and automated changes explainable later.

## Shelves

Physical shelf information is distinct from a suggested shelf inferred from marketplace/catalog evidence.

A suggestion does not silently become physical truth. Confirmation can occur through an explicit warehouse action.

## Reservations

Reserved stock belongs to an active order/workflow and is not treated as freely available inventory.

A recount therefore should not blindly discard reservation state.

## Principle

The warehouse, local database, and external marketplaces are related sources of state, but none should overwrite another without a defined transition and audit evidence.

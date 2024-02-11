# Interface Segregation principle

A client should never be forced to implement an interface that it doesn’t use or clients shouldn’t be forced to depend on methods they do not use.

We should develop specific interfaces instead of general-purpose interfaces.

# How to achieve
Define interface contracts based on the clients that use them and not on the implementations that we could have (The interfaces belong to the clients).
Avoid Header Interfaces by promoting Role Interfaces

# What do you gain?
High cohesion and low structural coupling
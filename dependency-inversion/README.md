# Dependency Inversion principle

Class should depend on abstractions (interface and abstract class) instead of concrete implementations.

It makes our classes de-coupled with each other.

If implementation changes then the class referring to it via abstraction won't change.


# How to achieve
Inject dependencies (parameters received in constructor)
Rely on the interfaces (contracts) of these dependencies and not on specific implementations
LSP as a premise

# What do you gain?
Facilitates the modification and replacement of implementations
Better class testability

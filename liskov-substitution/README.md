# Liskov Substitution principle

Child Classes should be replaceable with Parent Classes without breaking the behavior of our code.

Putting it simply in 5 sentences:

1. Child function arguments must match function arguments of parent

2. Child function return type must match parent function return type

3. Child pre-conditions cannot be greater than parent function pre-conditions

4. Child function post-conditions cannot be lesser than parent function post-conditions.

5. Exceptions thrown by child method must be the same as or inherit from an exception thrown by the parent method.
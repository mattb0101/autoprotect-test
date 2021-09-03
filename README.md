# AutoProtect Group code test

For this code test you will be required to produce some code to meet a number of
requirements. You can use whatever language you are most comfortable in to do
this code test though we would suggest using something that is a commonly used
language within the web domain such as JavaScript, PHP or Python.

## How to share your code

You should use some version control software for managing your software such as
`git`. You will be required to share your work using a public repository (such
as GitLab or GitHub). Please **do not fork this repo to develop your code**.

# Requirements

The client is an education facility that wants to have a website that displays
some reference information for their students. For this aspect of the work you
will be developing a couple of resources for the maths department.

You should write clean well documented code for your solution. Extra credit is
given for any amount of unit test coverage for any functions that you write as
part of your solution.

## User Story

**As a** student
**I want** to know what the square values up to 12 are
**So that** I can revise for my maths exam

**Background** A square value is the number you get when you multiply two
numbers that are the same together. For example the square value of 4 is 16 (4 x
4 = 16). A multiplication table is a matrix where the header row and the header
column of a table contain sequential integers. The cell values of the table
contain the value when you multiply the corresponding header row and header
column integer together.

**Acceptance Criteria**
- A multiplication table is displayed with header and column values that go to
  at least 12
- Each square number on the table must be displayed in bold
- You must be able to change the maximum header/column values with a single
  variable for each

## User Story

**As a** student
**I want** to know what the prime numbers up to 1000 are
**So that** I can revise for my maths exam

**Background** A prime number is a number that is only divisble by one and
itself. With this matrix you will need to produce a table that displays all
numbers with no header rows and highlight the prime numbers within the table.

**Acceptance Criteria**
- A table is displayed with all numbers in it sequentially up to a given upper
  limit
- A form field will accept a value for the limit
- The form field will not accept a value above 1000 and will start with a
  default value of 100
- Each row on the table should show 10 numbers
- The number of rows should be dynamic based on the upper limit
- Each prime number on the table must be displayed in bold
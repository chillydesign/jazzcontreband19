---
inject: true
to: scss/global.scss
after: INJECT HERE
skip_if: \@import "<%= name  %>";
---
@import "<%= name %>";

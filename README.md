# monorepo-test

## Current workflow:

1. On every commit in the main branch -> `generate_changelog` that generates full changelog to the monorepo

2. When the `generate_changelog` workflow is completed, the `generate_split_changelog` is executed adding the splitted changelogs to each package in the mono repo.

3. When the `generate_split_changelog` workflow is completed, the `Split Monorepo Dev-Master` is executed to move commits (changes + changelog) to each package repo.

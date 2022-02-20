# Drupal Rest Normalizer
Drupal Entity Normalizer for the Json API

## About Module
- It will create custom entity called "movie" (using Drush)
- Entity will have: Title, release date and genre(Taxonomy)
- Taxonomy vocabulary named “Genre” with the following terms: Comedy, Drama, and Action.
- Various type validation is added to the release date (Please comment the code in .module file to see.)
- On installation: module will create the vocabulary, taxonomy terms, genre field with reference to taxonomy, views for normalized json output 
s

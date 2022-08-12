End Points      
ads: 
-getall: /api/ad
-get one: /api/ad/$id

=============================================================================

-tags CRUD 

-getall: /api/tag
-get one: /api/tag/$id
-post: /api/tag     (title)
-put: /api/tag/$id    (new title)
-del: /api/tag/$id


==============================================================================

-categories CRUD 

-getall: /api/category
-get one: /api/category/$id
-post: /api/category     (title)
-put: /api/category/$id    (new title)
-del: /api/category/$id


================================================================================

filter:

filter by tag: /api/filter/tag/$id
filter by category: /api/filter/category/$id
filter user Ads: /api/filter/user_ads/$id

================================================================================ 



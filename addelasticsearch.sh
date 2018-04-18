# add to elasticsearch

name="$1"
email="$2"
shoe="$3"
review="$4"
stars="$5"

first="curl -XPOST 'localhost:9200/customer/_doc?pretty&pretty' -H
'Content-Type: application/json' -d'
{
  \"name\":\"$name\",
   \"email\":\"$email\",
   \"shoe\":\"$shoe\",
   \"review\":\"$review\",
   \"stars\":\"$stars\"
}
'"

eval $first

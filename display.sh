

display="curl -XGET 'localhost:9200/customer/_search?pretty' -H '
{ \"query\": { \"match_all\": {} }}'"

eval $display
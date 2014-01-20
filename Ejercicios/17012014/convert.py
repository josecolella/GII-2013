import simplejson as json
import pyyaml

f = open('meta.json', 'r')
jsonData = json.load(f)
f.close()

ff = open('meta.yaml', 'w+')
yamlData = {'uno': '', 'tres': ''}
yamlData['uno'] = jsonData['uno']
yamlData['tres'] = jsonData['tres']
yamlData.dump(data, ff, allow_unicode=True)

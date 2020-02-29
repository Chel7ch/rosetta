<?php

namespace Parser;

class CollectProxy extends SpiderParserDiDOM
{
    use FilterHidemyName;

    public $tail = '/ru/proxy-list/?start=';

    public function cleanLinks($links)
    {
        $link = array();
        foreach ($links as $urn) {
            $urn = trim($urn);

            // если пагинатор то берем
            if (stristr($urn, $this->tail)) {
                // создаем  URI
                $link[] = $this->url . $urn;
            }
        }

        if (!empty($link)) $link = array_values(array_unique($link));

        return $link;
    }

    public function prepOutput($data)
    {
        $data = $this->specialPrepOutput($data);
        if (PREP_QUERY_FOR_DB == 1) $data = $this->prepInsertDB($data, 'proxy');

        return $data;
    }

    public function prepInsertDB($data, $tabName = TAB_NAME)
    {
        $tab = 'INSERT INTO ' . $tabName . '(';
        $val = ' VALUES';
        for ($i = 1; $i < TAB_FIELDS; $i++) {
            $tab .= 'field' . ($i) . ',';
        }

        for ($i = 0; $i < count($data); $i++) {
            $val .= '(' . $data[$i] . '),';
        }

        $tab = substr($tab, 0, -1);
        $val = substr($val, 0, -1);
        $query = $tab . ')' . $val . ';';

        return $query;
    }

}

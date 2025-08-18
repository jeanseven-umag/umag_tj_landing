import { Flex, Text } from "@mantine/core";
import mediaLogo from "../../../../public/img/knowledge-img/media-logo.png";
import { useState } from "react";
import axios from "axios";
import { getStripText } from "../../utils/getStripText";
import { AsyncSelect } from "../../UI/AsyncSelect";

export const Searcher = () => {
  const [search, setSearch] = useState("");
  const [selected, setSelected] = useState("");

  const handleSearchChange = (inputValue) => {
    if (inputValue === "" && search?.length === 1) {
      setSearch("");
    } else {
      setSearch(inputValue);
    }
  };
  const handleNavigate = (link) => {
    window.location.href = `/knowledge-base-new/${link}`;
    setSelected("");
  };
  const loadOptions = async () => {
    if (!search) {
      return { options: [], hasMore: false };
    }
    const response = await axios.get(
      `/knowledge-base-new-search?search=${search}`
    );
    const data = response?.data?.data || [];
    return {
      options: data?.map((item) => ({
        value: item?.link,
        label: getStripText(item?.title_second),
      })),
      hasMore: false,
    };
  };
  return (
    <div className="bg-light-blue">
      <div className="knowledge-container center">
        <Flex
          className="searcher-padding"
          w="100%"
          align="center"
          justify="space-between"
        >
          <Flex
            className="searcher-block"
            align="center"
            onClick={() => {
              window.location.href = `/knowledge-base-new`;
            }}
          >
            <img className="searcher-logo" src={mediaLogo} />
            <Text className="main-caption-text mobile-display" color="#421C86">
              Новая база знаний Umag
            </Text>
          </Flex>
          <div className="searcher-input">
            <AsyncSelect
              w="100%"
              mah={300}
              placeholder="Поиск по базе статей"
              value={selected}
              search={search}
              loadOptions={loadOptions}
              onInputChange={handleSearchChange}
              onChange={(option) => handleNavigate(option?.value)}
            />
          </div>
        </Flex>
      </div>
    </div>
  );
};

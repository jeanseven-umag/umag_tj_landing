import { Flex, Text } from "@mantine/core";
import logo from "../../../../../public/img/knowledge-img/media-logo.png";
import tag from "../../../../../public/img/knowledge-img/new-tag.png";
import { useState } from "react";
import axios from "axios";
import { getStripText } from "../../../utils/getStripText";
import { AsyncSelect } from "../../../UI/AsyncSelect";

export const MediaBlock = () => {
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
    <div className="bg-light-blue w-100">
      <div className="knowledge-container center">
        <Flex className="media-block" align="center" direction="column">
          <img className="media-logo" src={logo} />
          <Flex pos="relative" direction="column" align="center">
            <img className="media-new-img" src={tag} alt="new" />
            <Text ta="center" mx={20} className="media-caption">
              Пойгоҳи дониш Umag
            </Text>
            <Text m="20px" className="media-text">
              Мақолаҳо, дастурҳо ва шаклҳои ҳуҷҷатҳо барои онҳое, ки тиҷоратро оғоз мекунанд ва мехоҳанд ҳама чизро фаҳманд
            </Text>
            <div className="searcher-article-input">
              <AsyncSelect
                w="100%"
                mah={300}
                placeholder="Ҷустуҷӯ дар пойгоҳи мақолаҳо"
                value={selected}
                search={search}
                loadOptions={loadOptions}
                onInputChange={handleSearchChange}
                onChange={(option) => handleNavigate(option?.value)}
              />
            </div>
          </Flex>
        </Flex>
      </div>
    </div>
  );
};

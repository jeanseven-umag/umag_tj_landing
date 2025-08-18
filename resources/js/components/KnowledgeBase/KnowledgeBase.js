import { Flex } from "@mantine/core";
import { Article } from "../Article/Article";
import { MediaBlock } from "./MediaBlock/MediaBlock";
import { MainSection } from "./MainSection/MainSection";
import { Sections } from "./Sections/Sections";

export const KnowledgeBase = () => {
  return (
    <div className="margin-header-footer">
      <MediaBlock />
      <Flex className="bg-light" direction="column">
        <MainSection />
        <Sections />
      </Flex>
      <Article />
    </div>
  );
};

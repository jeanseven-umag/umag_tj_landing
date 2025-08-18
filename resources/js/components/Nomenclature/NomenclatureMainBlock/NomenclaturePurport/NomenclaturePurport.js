import { Flex, Text } from "@mantine/core";

export const NomenclaturePurport = ({ data, setValue, scrollToElement }) => {
  return (
    <Flex
      w="100%"
      direction="column"
      align="flex-start"
      className="nomenclature-purport-sticky"
    >
      <Text className="nomenclature-purport-text nomenclature-purport-caption">
        Содержание:
      </Text>
      {data?.map((item, index) => (
        <Text
          key={`title-${index}`}
          onClick={() => {
            scrollToElement(`item-${index}`);
            setValue((prevValue) => {
              if (prevValue?.includes(`item-${index}`)) {
                return prevValue?.filter((item) => item !== `item-${index}`);
              } else {
                return [...prevValue, `item-${index}`];
              }
            });
          }}
          className="nomenclature-purport-text nomenclature-purport-link"
        >
          {item.title}
        </Text>
      ))}
    </Flex>
  );
};
